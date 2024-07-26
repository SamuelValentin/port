
@extends('layouts.main')
@section('content')
<div class="relative flex min-h-screen flex-col bg-black">
    <div class="min-h-28">
        <div class="mx-auto py-4">
            <h2 class="font-black text-9xl text-white uppercase">
                featured work
            </h2>

            <div class="gap-6 mt-8 mx-4 md:flex">
                <div class="md:w-1/2">
                    <div class="wrap-video">
                        <video class="object-cover h-96 w-full bg-black" loop="" >
                            <source
                                src="https://assets-global.website-files.com/62d57921074baa1ce7275405/648b6bdb802c1efb403e5be5_ZOOM2-transcode.mp4"
                                type="video/mp4">
                        </video>
                    </div>
                    <span class="pt-4 grid grid-cols-6 gap-4">
                        <span class="col-start-1 col-end-3 font-bold text-lg text-white uppercase font-mono">
                            bodega x new balance
                        </span>
                        <span class="col-end-7 col-span-2 text-sm text-slate-500 uppercase font-mono flex justify-end">
                            <span class="">
                                fashion/retail
                            </span>
                        </span>
                    </span>
                    <span class="block text-slate-400 text-xs uppercase font-mono">
                            the trail less taken
                    </span>
                </div>
                <div class="md:w-1/2">
                    <div class="wrap-video">
                        <video class="object-cover h-96 w-full bg-black" loop="" >
                            <source
                                src="https://assets-global.website-files.com/62d57921074baa1ce7275405/640fe762f883d05b8f683c6d_HOKABODEGA-transcode.mp4"
                                type="video/mp4">
                        </video>
                    </div>
                    <span class="pt-4 grid grid-cols-6 gap-4">
                        <span class="col-start-1 col-end-3 font-bold text-lg text-white uppercase font-mono">
                            bodega x hoka
                        </span>
                        <span class="col-end-7 col-span-2 text-sm text-slate-500 uppercase font-mono flex justify-end">
                            <span class="">
                                music video
                            </span>
                        </span>
                    </span>
                    <span class="block text-slate-400 text-xs uppercase font-mono">
                            the world at large
                    </span>
                </div>
            </div>
        </div>

        <div class="gap-6 mt-8 mx-4 md:flex">
            <div class="md:w-1/2">
                <div class="wrap-video">
                    <video class="object-cover h-96 w-full bg-black" loop="" >
                        <source
                            src="https://assets-global.website-files.com/62d57921074baa1ce7275405/6363f65c00474db467bed81b_Screen%20Recording%202022-11-03%20at%2011018%20PM-transcode.mp4"
                            type="video/mp4">
                    </video>
                </div>
                <span class="pt-4 grid grid-cols-6 gap-4">
                    <span class="col-start-1 col-end-3 font-bold text-lg text-white uppercase font-mono">
                        juno
                    </span>
                    <span class="col-end-7 col-span-2 text-sm text-slate-500 uppercase font-mono flex justify-end">
                        <span class="">
                            music video
                        </span>
                    </span>
                </span>
                <span class="block text-slate-400 text-xs uppercase font-mono">
                        grandma cabbage
                </span>
            </div>
            <div class="md:w-1/2">
                <div class="wrap-video">
                    <video class="object-cover h-96 w-full bg-black" loop="" >
                        <source
                            src="https://assets-global.website-files.com/62d57921074baa1ce7275405/63c084f55da78823643adbc3_ThePerfectPants-transcode.mp4"
                            type="video/mp4">
                    </video>
                </div>
                <span class="pt-4 grid grid-cols-6 gap-4">
                    <span class="col-start-1 col-end-3 font-bold text-lg text-white uppercase font-mono">
                        cala x public
                    </span>
                    <span class="col-end-7 col-span-2 text-sm text-slate-500 uppercase font-mono flex justify-end">
                        <span class="">
                            music video
                        </span>
                    </span>
                </span>
                <span class="block text-slate-400 text-xs uppercase font-mono">
                        transportation the perfect pants
                </span>
            </div>
        </div>
        <h2 class="font-black text-7xl text-white text-center uppercase my-16 hover:bg-white hover:text-black hover:rounded-full hover:px-6">
            view select work
        </h2>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    var video = $('.wrap-video').hover(hoverVideo, hideVideo);

    function hoverVideo(e) {
        $('video', this).get(0).play();
    }

    function hideVideo(e) {
        $('video', this).get(0).pause();
    }
</script>
@endsection