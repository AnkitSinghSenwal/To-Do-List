<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo List</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body style="background-color:black;">
            <div style="color:red;width: 30%;margin:auto; border: 3px solid blue; padding: 10px;"> 

            <h1>To do list </h1>
                
            @foreach ($listItems as $listItem)
                <div class="flex" style="align-items:center;">
                    <p>Task : {{ $listItem->name }} 
                    <form method="post" action="{{ route('markComplete', $listItem->id)}}" accept-charset="UTF-8">
                        {{csrf_field() }}    
                        <button type="submit" style="max-hight: 25px; margin-left: 20px;">Mark Complete</button>
                    </form>
                    </p>
                </div>
            @endforeach   
                
                
                
                
                <form method="post" action="{{ route('saveItem')}}" accept-charset="UTF-8">
                    {{csrf_field() }}

                    <label for="listItem">New Todo Item</label> </br>
                    <input type="text" name="listItem"> </br>
                    <button type="submit" style="border: 3px solid blue;">Add Item</button>
                
                </form>
                <a href="\workDone">See Work Done</a>
            </div>

            



    </body>
</html>
