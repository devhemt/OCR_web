<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\Image as I;
use Stichoza\GoogleTranslate\GoogleTranslate;



class Scan extends Component
{
    use WithFileUploads;
    public $image=null,$imageName=null,$text,$result=[];

    public function scanAll(){
        if ($this->image != null){
            if (Auth::guard("web")->check()) {
                $userId = Auth::guard("web")->id();
                if($this->image != null){
                    $this->validate([
                        'image' => 'image|max:1024', // 1MB Max
                    ]);
                    $this->image->storeAs('images', $this->image->getClientOriginalName(),['disk' => 'my']);
                }
                $exists = I::where('user_id', '=', $userId)->where('path','=',$this->image->getClientOriginalName())->exists();

                if (!$exists) {
                    $cus = I::create([
                        'user_id' => $userId,
                        'path' => $this->image->getClientOriginalName()
                    ]);
                }

                $this->save($this->image->getClientOriginalName());
            }else{
                $this->redirect('/login');
            }
        }
    }

    public function save($imageName){
        $imagePath = 'upload/images/'.$imageName;
        $image = Image::make('upload/images/'.$imageName);

        $client = new \GuzzleHttp\Client();
        $response = $client->post('http://localhost:5000/detection_and_recognition/', [
            'multipart' => [
                [
                    'name' => 'file',
                    'contents' => fopen($imagePath, 'r'),
                ],
            ],
        ]);
        $data = json_decode($response->getBody()->getContents(), true);
        $i=1;
        foreach ($data['text'] as $d){
            $bbox = $d['bbox'];
            $x1 = $bbox[0];
            $y1 = $bbox[1];
            $x2 = $bbox[2];
            $y2 = $bbox[3];

            // Vẽ hình vuông với tọa độ đã cho
            $image->rectangle($x1, $y1, $x2, $y2, function ($draw) {
                $draw->border(2, '#FF0000'); // Màu viền hình vuông (ở đây là đỏ)
            });
            $image->text($i, $x1, $y1 - 10, function ($font) {
                $font->file(2); // Numeric index for built-in font
                $font->size(24); // Font size
                $font->color('#FF0000'); // Text color
            });
            $i++;
        }

        // Lưu ảnh đã vẽ
        $image->save(public_path('upload\results\\'.$imageName));
        $this->imageName = $imageName;
        $this->text = $data['text'];
        $translator = new GoogleTranslate();

        foreach ($this->text as $t){
            $this->result[] = $translatedText = $translator->setSource('ja')->setTarget('vi')->translate($t['text']);
        }

        $this->image = null;
    }

    public function render()
    {
        return view('livewire.scan');
    }
}
