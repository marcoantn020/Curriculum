@props([
    "period",
    "work",
    "function"
])

<div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">

    <div class="flex flex-row items-end justify-start gap-2 mb-2">
        <h5 class="text-lg font-bold text-green-500">Periodo: </h5>
        <span class="text-gray-500 dark:text-gray-400"> {{ $period }}</span>
    </div>

    <div class="flex flex-row items-end justify-start gap-2 mb-2">
        <h5 class="text-lg font-bold text-green-500">Cargo: </h5>
        <p class="text-gray-500 dark:text-gray-400">{{ $work }}</p>
    </div>

    <div class="flex flex-col items-start justify-start mb-2">
        <h5 class="text-lg font-bold text-green-500">Função: </h5>
        <p class="text-gray-500 dark:text-gray-400">
            {{ $function }}
        </p>
    </div>
  </div>
