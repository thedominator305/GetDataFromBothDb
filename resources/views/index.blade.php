
    <h1> Information From Database 1 </h1>

    @for($i = 0; $i < count($students); $i++)

        <p>Id ---> {{ $students[$i]->id }} </p>
        <p>Name ---> {{ $students[$i]->name }} </p> 
        <p>email ---> {{ $students[$i]->email }} </p> 
        <p>phone ---> {{ $students[$i]->phone }} </p> 

    @endfor


    <h1> Information From Database 2</h1>

    @for($i = 0; $i < count($posts); $i++)

        <p>Id ---> {{ $posts[$i]->id }} </p>
        <p>Title ---> {{ $posts[$i]->title }} </p>
        <p>Body ---> {{ $posts[$i]->body }} </p>

    @endfor
