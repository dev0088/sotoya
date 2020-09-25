@extends('layouts.app')

@section('title')
<title>{{__('Sotoya')}}</title>
@endsection

@section('styles')
<style>

    .maxwidth-1280 {
        max-width: 1280px;
    }
    
</style>

@endsection

@section('content')

<main id="main-content" class="bg-whitegreen pb-10 md:pb-30">

    <div class="px-8 md:px-20">
        <div class="flex-none md:flex items-center pt-39 pb-26">
            <div class="mb-4 md:mb-0 flex items-center">
                <a href="/" class="text-base fontbold">Accueil</a>
                <span>
                    <svg class="ml-4 mr-3" xmlns="http://www.w3.org/2000/svg" width="7.253" height="12.5" viewBox="0 0 7.253 12.5">
                        <path id="chevron_right" d="M17.174,19.633a.644.644,0,0,0,.449-.186L23.091,14.1a.644.644,0,0,0,.2-.463.611.611,0,0,0-.2-.463L17.623,7.826a.611.611,0,0,0-.449-.193.625.625,0,0,0-.635.635.676.676,0,0,0,.186.449l5.02,4.916-5.02,4.916a.662.662,0,0,0-.186.449A.625.625,0,0,0,17.174,19.633Z" transform="translate(-16.289 -7.383)" fill="#3b3b3a" stroke="#3b3b3a" stroke-width="0.5"/>
                    </svg>
                </span>
            </div>
            <div class="mb-4 md:mb-0 flex items-center">
                <a href="/account_part" class="text-base fontbold">Mon compte particulier</a>
                <span>
                    <svg class="ml-4 mr-3" xmlns="http://www.w3.org/2000/svg" width="7.253" height="12.5" viewBox="0 0 7.253 12.5">
                        <path id="chevron_right" d="M17.174,19.633a.644.644,0,0,0,.449-.186L23.091,14.1a.644.644,0,0,0,.2-.463.611.611,0,0,0-.2-.463L17.623,7.826a.611.611,0,0,0-.449-.193.625.625,0,0,0-.635.635.676.676,0,0,0,.186.449l5.02,4.916-5.02,4.916a.662.662,0,0,0-.186.449A.625.625,0,0,0,17.174,19.633Z" transform="translate(-16.289 -7.383)" fill="#3b3b3a" stroke="#3b3b3a" stroke-width="0.5"/>
                    </svg>
                </span>
            </div>
            <span class="text-base fontbold">Mon historique de commande</span>
        </div>
    </div>

    <div class="w-full px-8 lg:px-15 xxl:px-20">
        <div class="w-full pt-4 md:pt-10 pb-4 md:pb-15 px-4 md:px-15 mb-4 shadow-md bg-white mx-auto maxwidth-1280">
            <p class="text-4xl fontbold text-center pb-11">Mon historique de commande</p>
        
            <div class="grid grid-cols-1 lg:grid-cols-2 xxl:grid-cols-3 col-gap-4 row-gap-4">
                @if(isset($history) && count($history) > 0)
                    @foreach($history as $key => $item)
                        <div class="border border-heavygray rounded-md pt-10 pb-4">
                            <p class="text-2xl fontbold text-center" style="padding-bottom:18px; padding-left:12px; padding-right:12px;">Commandé le 
                                <span class="capitalize">
                                    <?php echo ucfirst(utf8_encode(strftime('%d %b %Y', strtotime($item->created_at))));?>
                                </span>
                            </p>
                            <p class="text-lg fontbold text-center pb-6 @if($item["state_deliver"] == 0) text-green @endif">@if($item["state_deliver"] == 0) En cours de livraison @else Livré @endif</p>
                
                            <div class="flex relative justify-between items-center h-15 bg-whitepink">
                                <p class="text-lg fontbold absolute left-3 md:left-8">Prix TTC :</p>
                                <p class="text-4xl fontbold absolute right-3 md:right-8">{{$item["price"]}}€</p>
                            </div>
                            <div class="px-3 md:px-8">
                                <p class="text-base leading-none" style="padding-top:20px; padding-bottom:18px;">Type de menuiserie :<span class="fontbold mr-4">{{App\Model\Base\Join::find($item["join_id"])["name"] }}</span></p>
                                <hr class="w-full bg-border">
                                <p class="text-base leading-none" style="padding-top:20px; padding-bottom:18px;">Matériau :<span class="fontbold mr-4">{{App\Model\Base\Material::find($item["material_id"])["name"]}}</span></p>
                                <hr class="w-full bg-border">
                                <p class="text-base leading-none" style="padding-top:20px; padding-bottom:18px;">Gamme :<span class="fontbold mr-4">{{App\Model\Base\Range::find($item["range_id"])["name"]}}</span></p>
                                <hr class="w-full bg-border">
                                <p class="text-base leading-none" style="padding-top:20px; padding-bottom:18px;">Type d’ouverture :<span class="fontbold mr-4">{{App\Model\Base\Opening::find($item["opening_id"])["name"]}}</span></p>
                                <hr class="w-full bg-border">
                                <p class="text-base leading-none" style="padding-top:20px; padding-bottom:18px;">Nombre de vantaux :<span class="fontbold mr-4">{{App\Model\Base\Leave::find($item["leave_id"])["name"]}}</span></p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            @if(count($history) == 0)
                <div class="flex items-center" style="height:477px;">
                    <p class="fontbold mx-auto capitalize text-center text-2xl items-center">Pas d'histoire</p>
                </div>
            @endif
        </div>

    </div>

</main>

@endsection

@section('scripts')
@endsection


@section('footer')
@include('layouts.footer')
@endsection
