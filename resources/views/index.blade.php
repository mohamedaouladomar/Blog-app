@extends('layouts.app')

<style>
    .hero-bg-image{
        background: url('https://images.alphacoders.com/102/1027166.jpg') no-repeat center center /cover;
        background-attachment: fixed;
        height: 800px;
        display: inline-block;
      
    }
    h1{
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;    
        color: white
    }
    .custom-link {
    display: inline-block;
    background-color: #ff3366;
    color: #fff;
    padding: 15px 30px;
    font-size: 24px;
    font-weight: bold;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease, transform 0.3s ease;
  }

  .custom-link:hover {
    background-color: #ff0066;
    transform: rotate(360deg) scale(1.1);
    color: white;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }
  .img1{
    border-radius: 15px;
    height: 700px;
    width: 900px;
  }
  .p1{
    color: rgb(67, 67, 67);
    font-weight: bold
  }
  .p2{
    color: rgb(142, 142, 142)
  }
  .a1 {
  display: inline-block;
  padding: 12px 20px;
  background-color: #2a4fe2;
  color: #fff;
  font-size: 18px;
  text-align: center;
  text-decoration: none;
  border-radius: 4px;
  transition: background-color 0.3s ease;
}

.a1:hover {
  background-color: #f5f5f5;
  color: #2a4fe2;
  font-weight: bold;
}
.divp3{
  width: 800px;
  text-align: center;
  
}
.divp4{
  text-align: center;
}
.divp5{
  
}


</style>
@section('content')

<div class="d-flex justify-content-center align-items-center hero-bg-image"  >
    <div class="text-center">
        <h1 class="">Welcome to Moroccan Blog</h1>
        <br>
        <a href="/blog" class="custom-link">Let's Go</a>
    </div>
</div>



<div class="container" style="padding: 15px;margin-top:20px;">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6 text-center div11">
            <img src="https://w0.peakpx.com/wallpaper/202/493/HD-wallpaper-man-made-village-house-morocco.jpg" alt="" class="img-fluid img1">
        </div>
        <div class="col-md-6 div22 ">
            <h1 class="mt-3 text-dark font-bold"> Summer in Morocco</h1>
            <p class="mt-2 p1">By : Mohamed Aoulad omar </p>
            <p class="p2">Taste Wine in Sorrento · Go for a Gondola Ride in Venice · · Venice · Lake Garda · Sestri Levante · Cinque Terre · Numana. Tour Trieste on Foot · Explore Matera's Medieval Alleyways La Turquie en 4K. Jeudi 27 septembre à 19h au Centre Culturel Anatolie. À l'aide de l'imagerie numérique, découvrez les plus beaux monuments
                · Feel Olympian at Taormina's
                La Turquie en 4K. Jeudi 27 septembre à 19h au Centre Culturel Anatolie. À l'aide de l'imagerie numérique, découvrez les plus beaux monuments</p>
            <a href="" class="a1">Read More</a>
        </div>
    </div>
</div>



<div class="d-flex justify-content-center align-items-center " style="margin-top: 35px;">
  <h1 class="text-dark">Recents Posts</h1> 
</div>
<div class="divp3 container">
  <p class="mt-2 p2 ">Morocco  officially the Kingdom of Moroccois a country in the Maghreb region of North 
    Africa. It overlooks the Mediterranean Sea to the north and the Atlantic Ocean to the west,
    
      exclaves of Ceuta, Melilla and Peñón de Vélez de la Gomera, and several small Spanish-controlled islands off its coast. It spans an area of 446,300 km2
      with a population of roughly 37 million. Its official and predominant religion is Islam, and the official languages are Arabic and Berber; the Moroccan dialect of Arabic and French are also widely spoken. Moroccan identity and culture is a mix of Arab,
     Berber, and European cultures. Its capital is Rabat, while its largest city is Casablanca.</p>
</div>



<div class="d-flex flex-row bd-highlight mb-3 container divp4" style="margin-top: 30px;">

  <div class="d-flex align-content-stretch flex-wrap divp5 p-5  " style="background-color: #3258f0">
    <h1 style="font-weight: bold">Tetouan City</h1>
    
    <p class="text-light">
      Just like its first cousin, Tangier, Tetouan boasts a peaceful atmosphere. Known as the daughter of "Granada", 
      its a city with Hispano-Moorish footmarks. Its medina is listed as a World Heritage Site by UNESCO.
      Not far from Tetouan, the seaside resort of "Tamouda Bay"
       expands on fifteen kilometres of fine sandy bay. Prestigious establishments
        have settled there, giving a luxury setting to the region. In the cristal-clear 
        blue waters of the Mediterranean, you can onlye enjoy a peaceful stay while getting
         to know the art of living of the inhabitants.
      
      The city of Tetouan, with its multicultural identity, offers a journey through time !
      Tétouan was of particular importance in the Islamic period, from the
       8th century onwards, since it served as the main point of contact between
        Morocco and Andalusia. After the Reconquest, the town was rebuilt by Andalusian
         refugees who had been expelled by the Spanish. This is well illustrated by its art
          and architecture, which reveal clear Andalusian influence. Although one of the smallest 
          of the Moroccan medinas, Tétouan is unquestionably 
      the most complete and it has been largely untouched by subsequent outside influences.
    </p>
    <a href="" class="a1">Read More</a>
  </div>


  <div class="d-flex align-content-stretch flex-wrap">

    <img style="" src="https://as1.ftcdn.net/v2/jpg/03/76/12/64/500_F_376126482_XVwyTQNdCPmDMXIE3Vbqv5raVsdKskuG.jpg" alt="">
  </div>

  <div>

  </div>

</div>




@endsection