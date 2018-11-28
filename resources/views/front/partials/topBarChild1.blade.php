@if(GetSetting::getConfig('top-bar-child-check') == 'true')
                <span class="topbar-child1">
                    {{ GetSetting::getConfig('top-bar-child') }}
                </span>
@endif