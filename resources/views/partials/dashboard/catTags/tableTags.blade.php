<h1 class="text-center m-5">Articles' tags</h1>
<div class="tab-content container m-auto mb-5 row">
    <div class="tab-pane active pb-5" id="elements-preview-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Tag
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $category)
                    <tr>
                        <td>
                            {{ $category->id }}
                        </td>
                        <td>
                            {{ $category->name }}
                        </td>
                        <td class="d-flex h-100">
                            <a href="/tag/{{ $category->id }}/edit"><button data-text="Edit"
                                    class="submit-button submit-btn-2 button-one">Edit</button></a>
                            <form class="ms-2" action="/tag/{{ $category->id }}" method="POST">
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
    </div>
</div>
<div class="contact-us container customer-login bg-white">
    <div class="send-message">
        <form action="/tag" method="POST">
            @csrf
            <label for="catProd">Add a new product category</label>
            <input placeholder="Category name here..." type="text" name="name" id="catProd">
            <button data-text="add" class="submit-button submit-btn-2 button-one" type="submit">
                Add
            </button>
        </form>
    </div>
</div>
