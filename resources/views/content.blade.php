
<div class="fore">

    @foreach($paganti as $pagante)

        <span>{{ $pagante->id }}</span>
        <span>{{ $pagante->name }}</span>
        <span>{{ $pagante->lastname }}</span>
        <br>

    @endforeach
</div>
