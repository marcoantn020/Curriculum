<x-guest-layout>

    <h4 class="text-2xl font-bold dark:text-white">Certificados</h4>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

    <x-certificate.tabs-certificate />

    <div id="tabs-certificate">
        <div
            class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800"
            id="php"
            role="tabpanel"
            aria-labelledby="tab-php">
            <x-certificate.php-certificate />
        </div>

        <div
            class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800"
            id="java"
            role="tabpanel"
            aria-labelledby="tab-java">
            <x-certificate.java-certificate />
        </div>

        <div
            class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800"
            id="python"
            role="tabpanel"
            aria-labelledby="tab-python">
            <x-certificate.python-certificate />
        </div>

        <div
            class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800"
            id="frontend"
            role="tabpanel"
            aria-labelledby="tab-frontend">
            <x-certificate.frontend-certificate />
        </div>

        <div
            class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800"
            id="aws"
            role="tabpanel"
            aria-labelledby="tab-aws">
            <x-certificate.aws-certificate />
        </div>

        <div
            class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800"
            id="behavior"
            role="tabpanel"
            aria-labelledby="tab-behavior">
            <x-certificate.behavior-certificate />
        </div>

        <div
            class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800"
            id="fullcycle"
            role="tabpanel"
            aria-labelledby="tab-fullcycle">
            <x-certificate.fullcycle-certificate />
        </div>

        <div
            class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800"
            id="others"
            role="tabpanel"
            aria-labelledby="tab-others">
            <x-certificate.others-certificate />
        </div>
    </div>














</x-guest-layout>
