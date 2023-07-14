<?php
 enum EArticlesTypology {
    case computer;
    case videogames;
    case console;
    case smartphone;
    case wires;
    case others;

    public static function getCaseFromString($string) : EArticlesTypology{
      $returningCase = null;
      foreach(EArticlesTypology::cases() as $category){
         if($category->name == $string){
            $returningCase = $category;
         }
      }return $returningCase;
    }
 }


?>