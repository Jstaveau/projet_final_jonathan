<!-- contact-us-AREA START -->
<div class="contact-us-area  pt-80 pb-80">
    <div class="container">
        <div class="contact-us customer-login bg-white">
            <div class="send-message">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="title-1 text-uppercase mb-30">
                        Add a new team member</h4>
                </div>
                <form action="/team" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="pp">Change photo</label><br>
                    <input type="file" name="file" class="custom-file-input" id="chooseFile">
                    <label for="name">Member Name</label>
                    <input id="name" type="text" name="name"
                        placeholder="Member name here..." />
                    <label for="price">Post</label>
                    <input id="price" type="text" name="post"
                        placeholder="Member post here..." />
                    <label for="desc">Description</label>
                    <textarea name="description" id="desc" cols="30" rows="10"></textarea>
                    <p class="mb-0">
                        <input type="checkbox" id="boss" name="boss">
                        <label for="boss"><span>Boss (only one -> if you check it the other boss will be a simple slave)</span></label>
                    </p>
                    <button class="button-one submit-button mt-20" data-text="update" type="submit">Update</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- ABOUT-US-AREA END -->
