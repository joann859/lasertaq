<?php

class Gallery
{
      public static function getImage($id)
    {
        // Название изображения-пустышки
        $noImage = 'noimg.jpg';

        // Путь к папке с фото
        $path = '/views/lasertaq/images/gallery/';

        // Путь к изображению 
        $pathToImage = $path . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToImage)) {
            // Если изображение для товара существует
            // Возвращаем путь изображения товара
            return $pathToImage;
        }

        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
    }
       public static function getImageBySlider($id)
    {
        // Название изображения-пустышки
        $noImage = 'noimg.jpg';

        // Путь к папке с фото
        $path = '/views/lasertaq/images/main-slider/';

        // Путь к изображению 
        $pathToImage = $path . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToImage)) {
            // Если изображение для товара существует
            // Возвращаем путь изображения товара
            return $pathToImage;
        }

        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
    }
    public static function getPhotoListByAlbum($photoId = false, $page = 1)
    {
        //Проверяем соответствие категории
        if ($photoId) {
            
            $page = intval($page);            
            
        
            $db = Db::getConnection();            
            $photo = array();
            $result = $db->query("SELECT id FROM gallery "
                    . "WHERE cat = '$photoId' "
                    );

            $i = 0;
            while ($row = $result->fetch()) {
                $photo[$i]['id'] = $row['id'];
                $i++;
            }

            return $photo;       
        }
    }
     public static function getPhotoListByCybertag()
    {
        //Проверяем соответствие категории
         
           $db = Db::getConnection();            
            $photo = array();
            $result = $db->query("SELECT id FROM gallery "
                    . "WHERE cat = '1' AND preority = '1' "
                    . "LIMIT 6 "
                    
                    );

            $i = 0;
            while ($row = $result->fetch()) {
                $photo[$i]['id'] = $row['id'];
                $i++;
            

              
        }
        return $photo;     
    }
     public static function getPhotoListByLasertag()
    {
        //Проверяем соответствие категории
         
            $db = Db::getConnection();            
            $photo = array();
            $result = $db->query("SELECT id FROM gallery "
                    . "WHERE cat = '2' AND preority = '1' "
                    . "LIMIT 6 "
                    );

            $i = 0;
            while ($row = $result->fetch()) {
                $photo[$i]['id'] = $row['id'];
                $i++;
             

              
        }
         return $photo;     
    }
     public static function getPhotoListByWarstation()
    {
        //Проверяем соответствие категории
         
            $db = Db::getConnection();            
            $photo = array();
            $result = $db->query("SELECT id FROM gallery "
                    . "WHERE cat = '4' AND preority = '1' "
                    . "LIMIT 6 "
                    );

            $i = 0;
            while ($row = $result->fetch()) {
                $photo[$i]['id'] = $row['id'];
                $i++;
             

              
        }
         return $photo;     
    }
    public static function getPhotoListByPskov()
    {
        //Проверяем соответствие категории
         
            $db = Db::getConnection();            
            $photo = array();
            $result = $db->query("SELECT id FROM gallery "
                    . "WHERE cat = '3'  AND preority = '1' "
                     . "LIMIT 6  "
                    );

            $i = 0;
            while ($row = $result->fetch()) {
                $photo[$i]['id'] = $row['id'];
                $i++;
             

                    
        }
        return $photo;
    }


}
