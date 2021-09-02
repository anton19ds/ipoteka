<?
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg, pdf'],
        ];
    }
    
    public function upload()
    {
        if ($this->validate()) {

            $url = 'img_doc_' . rand(0,999).'_'.rand(0,999).'.' . $this->imageFile->extension;
            $this->imageFile->saveAs('@app/web/uploads/'.$url);
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