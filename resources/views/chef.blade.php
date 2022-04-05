
<section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Chefs</h6>
                        <h2>We offer the best ingredients for you</h2>
                    </div>
                </div>
            </div>

            
            <div class="row">
            @foreach($chefdeta as $chefdata)
                <div class="col-lg-4  mt-3">
                    <div class="chef-item">
                        <div class="thumb">
                            <img height="300" width="100" src="chef_images/{{$chefdata->image}}" alt="Chef #1">
                        </div>
                        <div class="down-content">
                            <h4>{{$chefdata->name}}</h4>
                            <span>{{$chefdata->speciality}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            

        </div>
    </section>