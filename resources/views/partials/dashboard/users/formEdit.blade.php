<!-- contact-us-AREA START -->
<div class="contact-us-area  pt-80 pb-80">
    <div class="container">
        <div class="contact-us customer-login bg-white">
            <div class="send-message">
                <form action="/user/{{$edit->id}}/update" method="POST">
                    @csrf
                    @method('PUT')
                    <h4 class="title-1 text-uppercase mb-30"><img src="{{asset('img/images_site/90x100/'.$edit->avatar->src)}}" alt="">  {{$edit->name}} - {{$edit->role->name}}</h4>
                    <input type="text" value="{{$edit->name}}" name="name" placeholder="Your name here..." />
                    <select name="role_id" id="">
                        @foreach ($roles as $role)
                            <option {{$edit->role_id == $role->id ? 'selected' : ''}} value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select> <br>
                        @csrf
                        @method('PUT')
                    <button class="button-one submit-button mt-20" data-text="update" type="submit">Update</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- ABOUT-US-AREA END -->
