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




{{--@push('scripts')--}}
    <script>
        const tabsElement = document.getElementById('tabs-certificate');

        // create an array of objects with the id, trigger element (eg. button), and the content element
        const tabElements = [
            {
                id: 'php',
                triggerEl: document.querySelector('#tab-php'),
                targetEl: document.querySelector('#php'),
            },
            {
                id: 'java',
                triggerEl: document.querySelector('#tab-java'),
                targetEl: document.querySelector('#java'),
            },
            {
                id: 'python',
                triggerEl: document.querySelector('#tab-python'),
                targetEl: document.querySelector('#python'),
            },
            {
                id: 'frontend',
                triggerEl: document.querySelector('#tab-frontend'),
                targetEl: document.querySelector('#frontend'),
            },
            {
                id: 'aws',
                triggerEl: document.querySelector('#tab-aws'),
                targetEl: document.querySelector('#aws'),
            },
            {
                id: 'behavior',
                triggerEl: document.querySelector('#tab-behavior'),
                targetEl: document.querySelector('#behavior'),
            },
            {
                id: 'fullcycle',
                triggerEl: document.querySelector('#tab-fullcycle'),
                targetEl: document.querySelector('#fullcycle'),
            },
            {
                id: 'others',
                triggerEl: document.querySelector('#tab-others'),
                targetEl: document.querySelector('#others'),
            },
        ];

        // options with default values
        const options = {
            defaultTabId: 'php',
            activeClasses:
                'text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-400 border-blue-600 dark:border-blue-500',
            inactiveClasses:
                'text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300',
            onShow: () => {
                console.log('tab is shown');
            },
        };

        // instance options with default values
        const instanceOptions = {
        id: 'tabs-example',
        override: true
        };


    </script>
{{--@endpush--}}







</x-guest-layout>
