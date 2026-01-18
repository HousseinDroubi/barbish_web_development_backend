<?php
  // Namespace: A way to organize and group code elements to avoid name conflicts.

  require_once("rectangle.php");
  require_once("triangle.php");
  require_once("square.php");

  // $rectangle = new Rectangle\AddShape();
  // $triangle = new Triangle\AddShape();
  // $square = new Square\AddShape();
  
  // !! Or you can do the following: Renaming namespace and use it as it's new name in this file
  
  use Rectangle\AddShape as RectangleAddShape;
  use Triangle\AddShape as TriangleAddShape;
  use Square\AddShape as SquareAddShape;

  $rectangle = new RectangleAddShape();
  $triangle = new TriangleAddShape();
  $square = new SquareAddShape();
?>