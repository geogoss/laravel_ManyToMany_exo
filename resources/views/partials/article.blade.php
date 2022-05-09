<section class="d-flex justify-content-around">

    <table class="w-25 table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Article</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <th scope="row">{{ $article->id }} </th>
                    <td>{{ $article->name }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <table class="w-25 table table-warning">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tag</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <th scope="row">{{ $tag->id }} </th>
                    <td>{{ $tag->name }} </td>
                    <td><a href="/show/{{$tag->id}}">Show</a></td>
                </tr>
            @endforeach
        </tbody>

    </table>

</section>

<section class="row">
    @foreach ($articles as $article)
        <div class=" card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $article->name }} </h5>
                @foreach ($article->tags as $tag)
                    <h6 class="card-subtitle mb-2 text-muted">{{ $tag->name }} </h6>
                @endforeach
                <p class="card-text">{{ $article->contenu }} </p>
            </div>
        </div>
    @endforeach
</section>
