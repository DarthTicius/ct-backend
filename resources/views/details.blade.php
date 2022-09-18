<div>
    <div aria-hidden="true" class="relative rounded sm:rounded-2xl mt-20">
        <img src={{ $thecar->standardImages[2]['url'] }} alt=""
            class="h-48 w-full object-cover object-center rounded sm:rounded-t-2xl" />
        <div class="absolute inset-0 bg-gradient-to-t from-gray-100" />
    </div>
    <div class="relative mx-auto mt-12 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">
        <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                Vehicle Specifications
            </h2>
            <p class="mt-4 text-gray-700">Vehicle data</p>
        </div>

        <dl
            class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:max-w-none lg:grid-cols-3 lg:gap-x-8">

            <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Make</dt>
                <dd class="mt-2 text-sm text-gray-500">{{ $thecar->car['make'] }}</dd>
            </div>
            <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Model</dt>
                <dd class="mt-2 text-sm text-gray-500">{{ $thecar->car['model'] }}</dd>
            </div>
            <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Name</dt>
                <dd class="mt-2 text-sm text-gray-500">{{ $thecar->car['specification'] }}</dd>
            </div>
            <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Body</dt>
                <dd class="mt-2 text-sm text-gray-500">{{ $thecar->car['body'] }}</dd>
            </div>
            <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Body Detailed</dt>
                <dd class="mt-2 text-sm text-gray-500">{{ $thecar->car['bodyDetailed'] }}</dd>
            </div>
        </dl>
    </div>
    <div class="relative mx-auto -mt-12 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">
        <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
            <p class="mt-4 text-gray-700">Technical details</p>
        </div>

        <dl
            class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:max-w-none lg:grid-cols-3 lg:gap-x-8">
            <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Body style</dt>
                <dd class="mt-2 text-sm text-gray-500">{{ $thecar->car['body'] }}</dd>
            </div>
            <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Body detail</dt>
                <dd class="mt-2 text-sm text-gray-500">{{ $thecar->car['bodyDetailed'] }}</dd>
            </div>
            <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Power (kw/hp)</dt>
                <dd class="mt-2 text-sm text-gray-500">{{ $thecar->horsepower }}</dd>
            </div>
            <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Cubic capacity (ccm)</dt>
                <dd class="mt-2 text-sm text-gray-500">{{ $thecar->cubicCapacity }}</dd>
            </div>
            <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Cylinders</dt>
                <dd class="mt-2 text-sm text-gray-500">{{ $thecar->cylinder }}</dd>
            </div>
            <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Steering</dt>
                <dd class="mt-2 text-sm text-gray-500">{{ $thecar->steering }}</dd>
            </div>
            <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Front Brakes</dt>
                <dd class="mt-2 text-sm text-gray-500">{{ $thecar->frontBrakes }}</dd>
            </div>
            <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Rear Brakes</dt>
                <dd class="mt-2 text-sm text-gray-500">{{ $thecar->rearBrakes }}</dd>
            </div>
            <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Doors</dt>
                <dd class="mt-2 text-sm text-gray-500">{{ $thecar->doors }}</dd>
            </div>
            <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Fuel</dt>
                <dd class="mt-2 text-sm text-gray-500">{{ $thecar->fuel }}</dd>
            </div>
        </dl>
    </div>
</div>
