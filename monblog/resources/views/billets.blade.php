@foreach($billets as $billet)
    {{$billet->bil_titre}}
    {{$billet->bil_date}}
    {{$billet->bil_contenu}}
@endforeach