<h1 class="text-center m-5">Articles</h1>
<div class="tab-content container m-auto mb-5 row">
    <div class="tab-pane active pb-5" id="elements-preview-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Author
                    </th>
                    <th>
                        Title
                    </th>
                    <th>
                        Content
                    </th>
                    <th>
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>
                            {{ $article->id }}
                        </td>
                        <td>
                            <img class="rounded" width="50px" height="45px"
                                src="{{ asset('img/images_site/90x100/' . $article->user->avatar->src) }}" alt="">
                            {{ $article->user->name }}
                        </td>
                        <td>
                            {{ $article->title }}
                        </td>
                        <td>
                            {{ substr($article->content, 0, 70) }}...
                        </td>
                        <td class="d-flex h-100">
                            <a href="/article/{{$article->id}}"><button data-text="See" class="submit-button me-2 submit-btn-2 button-one">See</button></a>
                            <a href="/article/{{$article->id}}/edit"><button data-text="Edit" class="submit-button submit-btn-2 button-one">Edit</button></a>
                            <form class="ms-2" action="/article/{{$article->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button data-text="delete" class="submit-button submit-btn-2 button-one" type="submit">
                                    delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a data-text="Add an article" class="button-one style-2 text-uppercase" href="article/create">Add an article</a><br>
    </div>
</div>
