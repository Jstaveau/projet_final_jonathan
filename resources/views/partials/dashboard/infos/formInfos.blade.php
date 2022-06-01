<!-- contact-us-AREA START -->
<h1 class="text-center m-5">Infos</h1>
<div class="contact-us-area ">
    <div class="container">
        <div class="contact-us customer-login bg-white">
            <div class="send-message">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="title-1 text-uppercase mb-30">
                        Hurst informations</h4>
                </div>
                <form action="/info/{{$info->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="address">Address</label>
                    <input id="address" type="text" value="{{ $info->address }}" name="address" placeholder="Address here..." />
                    <label for="price">Phone 1</label>
                    <input id="price" type="text" value="{{ $info->phone }}" name="phone"
                        placeholder="Phone number here..." />
                    <label for="phone2">Phone 2</label>
                    <input id="phone2" type="text" value="{{ $info->phone2 }}" name="phone2"
                        placeholder="Phone number here..." />
                    <label for="mail">Mail 1</label>
                    <input id="mail" type="text" value="{{ $info->mail }}" name="mail"
                        placeholder="Mail here..." />
                    <label for="mail2">Mail 2</label>
                    <input id="mail2" type="text" value="{{ $info->mail2 }}" name="mail2"
                        placeholder="Mail here..." />
                    <button class="button-one submit-button mt-20" data-text="update" type="submit">Update</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- ABOUT-US-AREA END -->
