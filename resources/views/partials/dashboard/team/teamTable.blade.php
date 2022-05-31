<h1 class="text-center m-5">Products</h1>
<div class="tab-content container m-auto mb-5 row">
    <div class="tab-pane active pb-5" id="elements-preview-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Member
                    </th>
                    <th>
                        Post
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                        Boss or not
                    </th>
                    <th>
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teams as $team)
                    <tr>
                        <td>
                            {{ $team->id }}
                        </td>
                        <td>
                            <img class="rounded" width="50px" height="45px"
                                src="{{ asset('img/images_site/120x120/' . $team->avatar->src) }}" alt="">
                            {{ $team->name }}
                        </td>
                        <td>
                                {{ $team->post }}
                        </td>
                        <td>
                            {{ substr($team->description, 0, 70) }}...
                        </td>
                        <td class="{{ $team->boss ? 'bg-success' : 'bg-danger' }}">
                            
                        </td>
                        <td class="d-flex h-100">
                            <a href="/team/{{$team->id}}/edit"><button data-text="Edit" class="submit-button submit-btn-2 button-one">Edit</button></a>
                            <form class="ms-2" action="/team/{{$team->id}}" method="POST">
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
        <a data-text="Add a member" class="button-one style-2 text-uppercase" href="/team/create">Add a member</a><br>
    </div>
</div>
