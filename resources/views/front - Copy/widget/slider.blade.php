<section class="main-slider">

    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
            <ul>

                @foreach($slider as $key => $slide)
                @if($key == 0)
                <li data-description="Slide Description" data-easein="default" data-easeout="default"
                    data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1=""
                    data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                    data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                    data-slotamount="default" data-thumb="{{asset('web/media/lg')}}/{{$slide->image}}"
                    data-title="Slide Title" data-transition="parallaxvertical">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                        data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                        src="{{asset('web/media/lg')}}/{{$slide->image}}">

                    @if($slide->title)

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['650','700','700','550']"
                        data-whitespace="normal" data-hoffset="['15','15','15','15']"
                        data-voffset="['-50','-90','-90','-120']" data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <h2>{{$slide->title}}</h2>
                    </div>
                    @endif

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['700','700','700','550']"
                        data-whitespace="normal" data-hoffset="['15','15','15','15']"
                        data-voffset="['70','40','20','0']" data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <div class="text">{{$slide->description}}</div>
                    </div>

                    <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['560','700','700','550']"
                        data-whitespace="normal" data-hoffset="['15','15','15','15']"
                        data-voffset="['160','140','120','125']" data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <div class="btns-box">
                            <a href="{{route('contact')}}" class="theme-btn btn-style-one">Get Quote</a>
                        </div>
                    </div>
                </li>

                @elseif($key == 1)

                <li data-description="Slide Description" data-easein="default" data-easeout="default"
                    data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1=""
                    data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                    data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                    data-slotamount="default" data-thumb="{{asset('web/media/lg')}}/{{$slide->image}}"
                    data-title="Slide Title" data-transition="parallaxvertical">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                        data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                        src="{{asset('web/media/lg')}}/{{$slide->image}}">
                    @if($slide->title)
                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['650','700','700','550']"
                        data-whitespace="normal" data-hoffset="['15','15','15','15']"
                        data-voffset="['-50','-90','-90','-120']" data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <h2>{{$slide->title}}</h2>
                    </div>
                    @endif

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['700','700','700','550']"
                        data-whitespace="normal" data-hoffset="['15','15','15','15']"
                        data-voffset="['70','40','20','0']" data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <div class="text">{{$slide->description}}</div>
                    </div>

                    <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['560','700','700','550']"
                        data-whitespace="normal" data-hoffset="['15','15','15','15']"
                        data-voffset="['160','150','120','125']" data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <div class="btns-box">
                            <a href="{{route('contact')}}" class="theme-btn btn-style-one">Get Quote</a>
                        </div>
                    </div>

                </li>


                @elseif($key == 2)

                <li data-description="Slide Description" data-easein="default" data-easeout="default"
                    data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-index="rs-1690" data-masterspeed="default" data-param1=""
                    data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                    data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                    data-slotamount="default" data-thumb="images/main-slider/image-3.jpg" data-title="Slide Title"
                    data-transition="parallaxvertical">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                        data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                        src="{{asset('web/media/lg')}}/{{$slide->image}}">
                    
                            @if($slide->title)

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['650','700','700','550']"
                        data-whitespace="normal" data-hoffset="['15','15','15','15']"
                        data-voffset="['-50','-90','-90','-120']" data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <h2>{{$slide->title}}</h2>
                    </div>
                    @endif

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['700','700','700','550']"
                        data-whitespace="normal" data-hoffset="['15','15','15','15']"
                        data-voffset="['70','40','20','0']" data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <div class="text">{{$slide->description}}</div>
                    </div>

                    <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['560','700','700','550']"
                        data-whitespace="normal" data-hoffset="['15','15','15','15']"
                        data-voffset="['160','140','120','125']" data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <div class="btns-box">
                            <a href="{{route('contact')}}" class="theme-btn btn-style-one">Get Quote</a>
                        </div>
                    </div>

                </li>



                @elseif($key == 3)



                <li data-description="Slide Description" data-easein="default" data-easeout="default"
                    data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1=""
                    data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                    data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                    data-slotamount="default" data-thumb="images/main-slider/image-2.jpg" data-title="Slide Title"
                    data-transition="parallaxvertical">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                        data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                        src="images/main-slider/image-2.jpg">

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['650','700','700','550']"
                        data-whitespace="normal" data-hoffset="['15','15','15','15']"
                        data-voffset="['-50','-90','-90','-120']" data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <h2>Modern technology <br> for your industry</h2>
                    </div>

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['700','700','700','550']"
                        data-whitespace="normal" data-hoffset="['15','15','15','15']"
                        data-voffset="['70','40','20','0']" data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <div class="text">{{$slide->description}}</div>
                    </div>

                    <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['560','700','700','550']"
                        data-whitespace="normal" data-hoffset="['15','15','15','15']"
                        data-voffset="['160','150','120','125']" data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <div class="btns-box">
                            <a href="{{route('contact')}}" class="theme-btn btn-style-one">Get Quote</a>
                        </div>
                    </div>

                </li>

                @endif

                @endforeach

        </div>
    </div>
</section>