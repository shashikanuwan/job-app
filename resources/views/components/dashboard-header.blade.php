<div class="relative block p-8 overflow-hidden border border-gray-100 rounded-lg">
    <span class="absolute inset-x-0 bottom-0 h-2  bg-gradient-to-r from-blue-300 via-blue-500 to-purple-500"></span>
    <div class="justify-between sm:flex">
        <div>
            <p class="text-xl font-bold text-gray-900">
                Welcome, {{Auth::user()->name}}
            </p>
            <p class="mt-1 text-xs font-medium text-gray-600">{{Auth::user()->user_name}}</p>
        </div>
    </div>
    <div class="mt-4 sm:pr-8">
        <p class="text-sm text-gray-500">
            Thank you for using our website
        </p>
    </div>
    <dl class="flex mt-6">
        <div class="flex flex-col-reverse">
            <dt class="text-sm font-medium text-gray-600">Registed</dt>
            <dd class="text-xs text-gray-500">{{Auth::user()->created_at->format('M d, Y - h:i a')}}</dd>
        </div>
    </dl>
</div>
