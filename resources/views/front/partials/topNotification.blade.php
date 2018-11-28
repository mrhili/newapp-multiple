    <!-- top noti -->
@if(GetSetting::getConfig('top-message-check') == 'true')

    <div class="flex-c-m size22 bg0 s-text21 pos-relative">
        {{ GetSetting::getConfig('top-message') }}
        <a href="{{url(GetSetting::getConfig('top-message-link'))}}" class="s-text22 hov6 p-l-5">
            {{ GetSetting::getConfig('top-message-link-text') }}
        </a>

        <button class="flex-c-m pos2 size23 colorwhite eff3 trans-0-4 btn-romove-top-noti">
            <i class="fa fa-remove fs-13" aria-hidden="true"></i>
        </button>
    </div>

@endif