<?
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadPage extends Model
{
    /**
     * @var UploadedFile
     */
    public $img;

    public function rules()
    {
        return [
            [['img'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg, pdf'],
        ];
    }
    
    public function upload()
    {
        if ($this->validate()) {

            $url = 'img_doc_' . rand(0,999).'_'.rand(0,999).'.' . $this->img->extension;
            $this->img->saveAs('@app/web/docs/'.$url);
            return $url;
        } else {
            return false;
        }
    }

        public function attributeLabels(){
            return [
                'imageFile' => 'Загрузка'
            ];






        }
}
?>