<?php
echo 'The shape class(parent) :<br> ';
$shape = new Shape(10, 20);
$shape->setName('square');
echo 'the shape name is: ' . $shape->getName() . '<br>';
echo 'the shape id: #' . $shape->getId()  . '<br>';
echo 'the shape area: ' . $shape->area() . '<br>';
echo  'the shape type desc: ' . $shape->getTypeDescription() . '<br>';
echo  'the shape full desc: ' . $shape->getFullDescription() . '<br> <br>';
print_r($shape);
echo '<hr> ';
echo 'The rectangle class(child) :<br> ';
$rectangle = new Rectangle(11, 2);
$rectangle->setName('rectangle');
echo 'the shape name is: ' . $rectangle->getName() . '<br>';
echo 'the rectangle id: #' . $rectangle->getId()  . '<br>';
echo 'the rectangle area: ' . $rectangle->area() . '<br>';
echo  'the rectangle type desc: ' . $rectangle->getTypeDescription() . '<br>';
echo  'the rectangle full desc: ' . $rectangle->getFullDescription() . '<br> <br>';
print_r($rectangle);
echo '<hr> ';
echo 'The circle class(child) :<br> ';
$circle = new Circle(10);
$circle->setName('circle');
echo 'the shape name is: ' . $circle->getName() . '<br>';
echo 'the circle id: #' . $circle->getId()  . '<br>';
echo 'the circle area: ' . $circle->area() . '<br>';
echo  'the circle type desc: ' . $circle->getTypeDescription() . '<br>';
echo  'the circle full desc: ' . $circle->getFullDescription() . '<br> <br>';
print_r($circle);
// dd($rectangle);
// echo shape::SHAPE_TYPE;




// echo '<br>';
// // $rectangle = new Rectangle(10,20)
// // echo $shape->getTypeDescription() . '<br>';
// echo $shape->getFullDescription();
// echo '<br>';

// $circle = new Circle(10);
// $circle->setName('circle');

// echo $circle->area();
// echo '<br>';
// echo $circle->getFullDescription();
// dd($circle);
// dd($shape);
