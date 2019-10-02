@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
     <img src="https://scontent-mia3-1.cdninstagram.com/vp/2f4359f626134c45381fe2cf3ef185c3/5E125D79/t51.2885-19/s320x320/44580371_327715777779886_6917284875930173440_n.jpg?_nc_ht=scontent-mia3-1.cdninstagram.com" 
class="rounded-circle" style="height:150px">
        </div>
        <div class="col-9  pt-5 pl-5">
            <div><h1>{{Auth::user()->name}}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>788</strong> posts</div>
                <div class="pr-5"><strong>611</strong> followers</div>
                <div class="pr-5"><strong>511</strong> following</div>
            </div>

            <div class="pt-3"> <strong> Pabel Ernesto Jimenez Andino</strong> </div>
            <div>Senior Developer with some music skills</div>
        </div>
        
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://scontent-mia3-1.cdninstagram.com/vp/a01b8a94ace76b8bfb511d6e8c575923/5DF8A5A4/t51.2885-15/e35/c0.180.1440.1440/s150x150/69466584_143100546932980_5317599042000541740_n.jpg?_nc_ht=scontent-mia3-1.cdninstagram.com&_nc_cat=104" class="w-100" alt="">
        </div>

        <div class="col-4">
                <img src="https://scontent-mia3-1.cdninstagram.com/vp/8f88cabd161e6f05bba9be84347b1ba6/5DF4A0B7/t51.2885-15/e15/s150x150/67760827_484726625640100_706780548800691824_n.jpg?_nc_ht=scontent-mia3-1.cdninstagram.com&_nc_cat=104" class="w-100" alt="">
        </div>

        <div class="col-4">
                <img src="https://scontent-mia3-1.cdninstagram.com/vp/8d8531ee29a379033923f082378229bd/5DF50072/t51.2885-15/e35/c180.0.720.720a/s150x150/67361639_135338084364958_754212417297837144_n.jpg?_nc_ht=scontent-mia3-1.cdninstagram.com&_nc_cat=110" class="w-100" alt="">
        </div>



    </div>
</div>
@endsection
