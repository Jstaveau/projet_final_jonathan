<h1 class="text-center m-5">Banners</h1>
<div class="tab-content container m-auto mb-5 row">
    <div class="tab-pane active pb-5" id="elements-preview-3">
        <table class="table bg-white table-bordered">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Text
                    </th>
                    <th>
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($banners as $banner)
                    <tr>
                        <td>
                            {{ $banner->id }}
                        </td>
                        <td class="d-flex justify-content-between">
                            {{ $banner->title }}
                            <img class="rounded" width="300px"
                            src="{{ asset('img/images_site/1920x300/' . $banner->image->src) }}" alt="">
                        </td>
                        <td class="h-100">
                            <a href="/banner/{{$banner->id}}/edit"><button data-text="edit" class="submit-button ms-2 submit-btn-2 button-one">
                                edit
                            </button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
