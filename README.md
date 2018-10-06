# data-filter
You can filter and control your arrays with DataFilter in your PHP projects easily.

## Getting Started
I create this Library for my projects. This Library will able to be useful for you. For now, the Library contains just one class. The library's facilities;  
:heavy_check_mark: Filtering your array elements (Bigger, Smaller, Equal...)  
:heavy_check_mark: Arranging your array elements (ASC,DESC)  
:heavy_check_mark: Formatting your array elements's values (can be improved according to your needs)  
:heavy_check_mark: Editing your array elements's values    

## Installation
If you want to use in your projects you can copy Library files in your project folder. You should load class file manully.
```
<?php 
require_once('DataFilter/index.php');
$df = new DataFilter;
```

## Definition & Recommendation
The structure;  
   1. Filter()
      - ->equal()
      - ->bigger()
      - ->smaller()
      - ->biggerEqual()
      - ->smallerEqual()
      - ->notEqual()
   2. Formatter()
      - ->date()
      - ->money()
   4. Editor()
      - ->edit()
   3. Calculator()
      - ->addition()
      - ->count()
      
 Common Functions;
   1. orderBy()
   2. get()

The functions can be integrated with each other. Because of that you should know which function should use first.  
For example, If you will use **Filter()** after **Formatter()** there will be able to some problems caused your array values type. Before you use sub function of Filter() like Filter()->bigger("Balance") , you should check your values is comparable. For example, this function 'Formatter()->money()' converts numeric value to text value like that 102.45 -> 102,45  As you know the comma is not numeric. In this situation probably you will encounter wrong result because faulty order of functions you used. To get the right results, you must follow these order Filter()->bigger("expColumnName")->Formatter()->money("expColumnName")

## Example 1
```
...

  $df->add(
  [
    [
      ID=>1,
      Name=>Kerem,
      Surname=>Kurt,
      Balance=>102.45
    ],
    [
      ID=>2,
      Name=>Ahmet,
      Surname=>Ars,
      Balance=>656.12
    ]
  ]);

  $myArr = $df->Filter()->equal(656.12,"Balance")    //  <-- filter array by Balance columns equal 656.12
              ->Formatter()->money("Balance")        //  <-- change format values of each Balance keys 
              ->Editor()->edit("$ %s","Balance")     //  <-- edit each value has Balance key (%s returns existed value)
              ->get();                               //  <-- returns filtered array
       
  print_r($myArr);

```
Output:
```
Array(
  [0]=>[
      ID=>2,
      Name=>Ahmet,
      Surname=>Ars,
      Balance=>$ 656,12  // <-- changed format
  ]
)
```
## Example 2
```
  ...
  
  for ($i=195; $i < 205; $i++) {
    $df->add($i);    // <-- parameter can accept just element or array
  }
  print_r($df->get()); 
  
  $df->Filter()->bigger(200)->orderBy("DESC")
     ->Formatter()->money()
     ->Editor()->edit("$ %s");
  print_r($df->get());
```
Output:
```
Array
(
    [0] => 195
    [1] => 196
    [2] => 197
    [3] => 198
    [4] => 199
    [5] => 200
    [6] => 201
    [7] => 202
    [8] => 203
    [9] => 204
)
Array
(
    [0] => $ 204,00
    [1] => $ 203,00
    [2] => $ 202,00
    [3] => $ 201,00
)
```
## Example 3
```
   ...

$df->Filter()->bigger("2018-01-01 00:00:00","Date")->smaller("2018-02-30 24:00:00","Date")->orderBy("DESC","Date")
   ->Formatter()->money("TotalAmount") // <-- money() function converts double to string like 102.45 -> 102,45 
   ->Editor()->edit("$ %s","TotalAmount"); 

print_r($df->get());  // prints refined array
```
Output:
```
Array
(
    [0] => Array
        (
            [OrderID] => 99
            [TotalAmount] => $ 18,85
            [Date] => 2018-02-30 09:07:00
            [Status] => 2
        )

    [1] => Array
        (
            [OrderID] => 98
            [TotalAmount] => $ 358,00
            [Date] => 2018-01-13 10:08:00
            [Status] => 4
        )

    [2] => Array
        (
            [OrderID] => 97
            [TotalAmount] => $ 591,77
            [Date] => 2018-01-12 00:01:00
            [Status] => 4
        )

)
```

