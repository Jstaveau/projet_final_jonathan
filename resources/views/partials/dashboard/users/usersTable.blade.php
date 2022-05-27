<h1 class="text-center m-5">Users</h1>
<div class="tab-content container m-auto mb-5 row">
    <div class="tab-pane active" id="elements-preview-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        User
                    </th>
                    <th>
                        Role
                    </th>
                    <th>
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>
                            {{ $user->id }}
                        </td>
                        <td>
                            <img class="rounded" width="50px" height="45px"
                                src="{{ asset('img/images_site/90x100/' . $user->avatar->src) }}" alt="">
                            {{ $user->name }}
                        </td>
                        <td>
                            {{ $user->role->name }}
                        </td>
                        <td>
                            <a href="/user/{{$user->id}}/edit"><button data-text="Edit" class="submit-button submit-btn-2 button-one">Edit</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
