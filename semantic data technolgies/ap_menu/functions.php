<?php
require_once( "sparql_library.php" );

class Functions{
    private $db;
    
    public function __construct(){
    # Connecting PHP to Fueski server
	$db = sparql_connect( "http://localhost:3030/menuap/sparql" );
	if( !$db ) { print sparql_errno() . ": ---" . sparql_error(). "\n"; exit; }
    # initalising the namespace for ontology URI
	sparql_ns( "sc","http://www.semanticweb.org/anude/ontologies/2022/9/apmenunew#" );
    }
    # Funtion to get menu list
    public function getMenuList(){
        $sparql = "SELECT ?name 
        WHERE {
                ?x a sc:menu.
                ?x sc:menuList ?name
            }";
        $result = sparql_query( $sparql ); 
        if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
        return $result;
    }
    # Funtion to get all Cusines
    public function getCusine() {
        $sparql = "SELECT ?cName 
        WHERE {
                ?x a sc:cusine.
                ?x sc:cusinename ?cName
            }";
        $result = sparql_query( $sparql ); 
        if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
        return $result;   
    }
    
    # Funtion to get all soups
    public function get_soup() {
        $sparql = "SELECT ?soupName ?price
        WHERE {
                ?x a sc:soups.
                ?x sc:dishName ?soupName.
                ?x sc:price ?price
            }";
        $result = sparql_query( $sparql ); 
        if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
        return $result;   
    }

    # Funtion to get all salads
    public function get_salad() {
        $sparql = "SELECT ?saladName ?price
        WHERE {
                ?x a sc:salads.
                ?x sc:dishName ?saladName.
                ?x sc:price ?price
            }";
        $result = sparql_query( $sparql ); 
        if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
        return $result;   
    }

    # Funtion to get all Chicken Staters
    public function get_chikenStater() {
        $sparql = "SELECT ?csName ?price
        WHERE {
                ?x a sc:chickenStarters.
                ?x sc:dishName ?csName.
                ?x sc:price ?price
            }";
        $result = sparql_query( $sparql ); 
        if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
        return $result;   
    }

    # Funtion to get all Veg Staters
    public function getVegStarter() {
        $sparql = "SELECT ?vsName ?price
        WHERE {
                ?x a sc:vegStarters.
                ?x sc:dishName ?vsName.
                ?x sc:price ?price
            }";
        $result = sparql_query( $sparql ); 
        if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
        return $result;   
    }
# Funtion to get all beers
public function getBeer() {
    $sparql = "SELECT ?bName ?price
    WHERE {
            ?x a sc:beer.
            ?x sc:beverageName ?bName.
            ?x sc:price ?price
        }";
    $result = sparql_query( $sparql ); 
    if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
    return $result;   
}
# Funtion to get all teas
public function get_tea() {
    $sparql = "SELECT ?bName ?price
    WHERE {
            ?x a sc:tea.
            ?x sc:beverageName ?bName.
            ?x sc:price ?price
        }";
    $result = sparql_query( $sparql ); 
    if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
    return $result;   
}
# Funtion to get all coffee
public function get_coffee() {
    $sparql = "SELECT ?bName ?price
    WHERE {
            ?x a sc:coffee.
            ?x sc:beverageName ?bName.
            ?x sc:price ?price
        }";
    $result = sparql_query( $sparql ); 
    if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
    return $result;   
}
# Funtion to get all cool drinks
public function get_cooldrink() {
    $sparql = "SELECT ?bName ?price
    WHERE {
            ?x a sc:coolDrinks.
            ?x sc:beverageName ?bName.
            ?x sc:price ?price
        }";
    $result = sparql_query( $sparql ); 
    if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
    return $result;   
}
    

    # Funtion to get all Arabian Wraps
    public function getArabianWraps() {
        $sparql = "SELECT ?dishName ?price
        WHERE {
                ?x a sc:arabian.
                  ?x sc:hasArabianWrap ?AW.
                ?AW sc:dishName ?dishName.
                ?AW sc:price ?price 
      
    }";
        $result = sparql_query( $sparql ); 
        $sparql = "SELECT ?dishName ?price
        WHERE {
                ?x a sc:arabian.
                  ?x sc:hasArabianWrap ?AW.
                ?AW sc:dishName ?dishName.
                ?AW sc:price ?price
      
    }";
    $result =  sparql_query( $sparql ); 
    
        if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
        return $result;   
    }

    # Funtion to get all Arabian Rice
    public function getArabianRice(){
        $sparql = "SELECT ?dishName ?price
        WHERE {
                ?x a sc:arabian.
                  ?x sc:hasArabianRice ?AR.
                ?AR sc:dishName ?dishName.
                ?AR sc:price ?price
                   
      
    }";
    $result =  sparql_query( $sparql ); 
    if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
    return $result;  
    }

    # Funtion to get all South Indian Biriyani
    public function getSouthIndianBiriyani(){
        $sparql = "SELECT ?dishName ?price
        WHERE {
                ?x a sc:southIndian.
                  ?x sc:hasSouthIndianBiriyani ?SIB.
 				 ?SIB sc:dishName ?dishName.
                  ?SIB sc:price ?price
    
    }";
    $result =  sparql_query( $sparql ); 
    if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
    return $result;  
    }


    # Funtion to get all South Indian Curry
    public function getSouthIndianCurry(){
        $sparql = "SELECT ?dishName ?price
        WHERE {
                ?x a sc:southIndian.
                  ?x sc:hasSouthIndianCurry ?SIB.
  				?SIB sc:dishName ?dishName.
                  ?SIB sc:price ?price
 			
    
    }";
    $result =  sparql_query( $sparql ); 
    if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
    return $result;  
    }

    # Funtion to get all South Indian Breads
    public function getSouthIndianBreads(){
        $sparql = "SELECT ?dishName ?price
        WHERE {
                ?x a sc:southIndian.
                  ?x sc:hasSouthIndianBread ?SIB.
  				?SIB sc:dishName ?dishName.
                ?SIB sc:price ?price
 			
    
    }";
    $result =  sparql_query( $sparql ); 
    if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
    return $result;
}

     # Funtion to get all South Indian Dosa
    public function getSouthIndianDosa(){
        $sparql = "SELECT ?dishName ?price
        WHERE {
                ?x a sc:southIndian.
                  ?x sc:hasSouthIndianDosa ?SIB.
  				?SIB sc:dishName ?dishName.
                ?SIB sc:price ?price
 			
    
    }";
    $result =  sparql_query( $sparql ); 
    if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
    return $result;  
    }



    # Funtion to get a particular Dish Data
    public function getDishData($dishName){
        $sparql = "SELECT ?dishName ?ingredients ?spicyLevel ?rating
        WHERE {
                ?x sc:dishName ?dishName.
                  ?x sc:ingredients ?ingredients.
                  ?x sc:spicyLevel ?spicyLevel.
                  ?x sc:rating ?rating
                   FILTER ( str(?dishName)='".$dishName."') .
      
    }";
    $result =  sparql_query( $sparql ); 
    if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
    return $result;

    }

    # Funtion to get Dish/Beverage Data based on search
    public function getDishes($search){
        $sparql = "SELECT DISTINCT ?name ?price
        WHERE {
                {
                    ?x sc:dishName ?name. 
                    ?x sc:price ?price. 
                    FILTER (contains(lcase(str(?name)),lcase('".$search."')))
                }
                UNION
                {
                    ?x sc:beverageName ?name. 
                    ?x sc:price ?price. 
                    FILTER (contains(lcase(str(?name)),lcase('".$search."')))
                }
                UNION
                {
                    ?x a sc:".$search.".
                    ?x sc:dishName ?name.
                    ?x sc:price ?price 
                    

                }
                UNION
                {
                    ?x a sc:".$search.".
                    ?x sc:beverageName ?name.
                    ?x sc:price ?price 
                    

                }
      
    }";
    $result =  sparql_query( $sparql ); 
    if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
    return $result;

    }

     # Funtion to get all Dish Data
    public function getAllDishes(){
        $sparql = "SELECT ?dishName ?ingredients ?spicyLevel ?rating
        WHERE {
                ?x sc:dishName ?dishName.
                  ?x sc:ingredients ?ingredients.
                  ?x sc:spicyLevel ?spicyLevel.
  					?x sc:rating ?rating
                  
      
    }";
    $result =  sparql_query( $sparql ); 
    if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
    return $result;

    }
    # Funtion to get all Staters Data
    public function getStarterDishes(){
        $sparql = "select ?dishName ?ingredients ?spicyLevel ?rating 
        where{
        ?x a sc:menu.
          ?x sc:hasStarters ?starter.
         ?starter sc:dishName ?dishName.
         ?starter sc:ingredients ?ingredients.
                  ?starter sc:spicyLevel ?spicyLevel.
  					?starter sc:rating ?rating
         
        }";
    $result =  sparql_query( $sparql ); 
    if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
    return $result;

    }

    public function sortStarterDishes($sort){

        if($sort=="high"){
        $sparql = "select ?dishName ?ingredients ?spicyLevel ?rating 
        where{
        ?x a sc:menu.
          ?x sc:hasStarters ?starter.
         ?starter sc:dishName ?dishName.
         ?starter sc:ingredients ?ingredients.
                  ?starter sc:spicyLevel ?spicyLevel.
  					?starter sc:rating ?rating
         
        } ORDER BY DESC(?rating)";
    $result =  sparql_query( $sparql ); 
    if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
    return $result;
    }
   else{
        $sparql = "select ?dishName ?ingredients ?spicyLevel ?rating 
        where{
        ?x a sc:menu.
          ?x sc:hasStarters ?starter.
         ?starter sc:dishName ?dishName.
         ?starter sc:ingredients ?ingredients.
                  ?starter sc:spicyLevel ?spicyLevel.
  					?starter sc:rating ?rating
         
        } ORDER BY ASC(?rating)";
    $result =  sparql_query( $sparql ); 
    if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
    return $result;
    }
    }

     # Funtion to sort Dish Data with respect to dish rating
    public function getAllSortDishes($sort){

        if($sort=="high"){

        $sparql = "SELECT ?dishName ?ingredients ?spicyLevel ?rating
        WHERE {
                ?x sc:dishName ?dishName.
                  ?x sc:ingredients ?ingredients.
                  ?x sc:spicyLevel ?spicyLevel.
  					?x sc:rating ?rating
                  
      
    }
ORDER BY DESC(?rating)";
    $result =  sparql_query( $sparql ); 
    if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
    return $result;
}
else{
    $sparql = "SELECT ?dishName ?ingredients ?spicyLevel ?rating
        WHERE {
                ?x sc:dishName ?dishName.
                  ?x sc:ingredients ?ingredients.
                  ?x sc:spicyLevel ?spicyLevel.
  					?x sc:rating ?rating
                  
      
    }
    ORDER BY ASC(?rating)";
    $result =  sparql_query( $sparql ); 
    if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
    return $result;
}

    }

    
}
?>