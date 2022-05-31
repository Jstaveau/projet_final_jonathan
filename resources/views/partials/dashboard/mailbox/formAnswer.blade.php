<!-- contact-us-AREA START -->
<div class="contact-us-area  pt-80 pb-80">
    <div class="container">
        <div class="contact-us customer-login bg-white">
            <div class="send-message">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="title-1 text-uppercase mb-30">Answer to : 
                        {{ $mail->name }} -
                        {{ $mail->mail }}</h4>
                </div>
                <form action="/sendanswer/{{$mail->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="name">Subject</label>
                    <input id="name" type="text" name="subject"
                        placeholder="Your subject here" />
                    <label for="message">Message</label>
                    <textarea placeholder="Your message here..." name="message" id="message" cols="30" rows="10"></textarea>
                    <button class="button-one submit-button mt-20" data-text="send" type="submit">Send</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- ABOUT-US-AREA END -->
