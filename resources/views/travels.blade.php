@extends('layouts.main')

@section('content')
    <div>
        <h1>Viaggi</h1>
        <h2>Lista Viaggi</h2>
        <div class="cards">
        @foreach ($travels as $travel)

        <div class="card">
            <h2>{{$travel->città }}</h2>
            <h2>{{$travel->nazione }}</h2>
            <h2>{{$travel->giorni }} giorni</h2>
            <p>{{$travel->descrizione }}</p>
            <h2>{{$travel->prezzo }}€</h2>
        </div>
    
        @endforeach
    </div>
<section>

    {{$travels->links()}}
</section>

    </div>
@endsection

<style>
    .card {
        height: 300px;
        width: 400px;
        background: yellow;
        padding: 25px;
        margin: 25px;
        
       
    }
    .cards {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        justify-content: start;
  align-items: start;
  align-content: start;
        
    }
</style>