<x-guest-layout>
    <h4 class="text-2xl font-bold dark:text-white">Projetos</h4>
    <h4 class="text-xl font-bold dark:text-white">Java</h4>

    <div class="flex justify-start gap-4 flex-wrap">
        <x-projects.card-corousel-projects>

            <x-projects.card-project-detail
                title="Crud simples com autenticação"
                git="https://github.com/marcoantn020/java-login-autentication-simple"
                :image_1="asset('imagens/projects/project1.png')"
                :image_2="asset('imagens/projects/project2.png')"
            />

        </x-projects.card-corousel-projects>

        <x-projects.card-corousel-projects>

            <x-projects.card-project-detail
                title="Mini Tweeter Clone"
                git="https://github.com/marcoantn020/mini-clone-tweeter"
                :image_1="asset('imagens/projects/tweeter.png')"
                :image_2="asset('imagens/projects/tweeter1.png')"
            />

        </x-projects.card-corousel-projects>

        <x-projects.card-corousel-projects>

            <x-projects.card-project-detail
                title="Bate Papo"
                git="https://github.com/marcoantn020/Bate-papo"
                :image_1="asset('imagens/projects/batepapo.png')"
            />

        </x-projects.card-corousel-projects>

        <x-projects.card-corousel-projects>

            <x-projects.card-project-detail
                title="Cadastro de Notificação"
                git="https://github.com/marcoantn020/register-notifications"
                :image_1="asset('imagens/projects/Swagger.png')"
            />

        </x-projects.card-corousel-projects>

        <x-projects.card-corousel-projects>

            <x-projects.card-project-detail
                title="Maps - Ponto de Referência"
                git="https://github.com/marcoantn020/reference-point"
                :image_1="asset('imagens/projects/point.png')"
            />

        </x-projects.card-corousel-projects>

        <x-projects.card-corousel-projects>

            <x-projects.card-project-detail
                title="Transferência bancaria"
                git="https://github.com/marcoantn020/transfer-between-merchant-and-user"
                :image_1="asset('imagens/projects/Swagger.png')"
            />

        </x-projects.card-corousel-projects>

        <x-projects.card-corousel-projects>

            <x-projects.card-project-detail
                title="Micro serviço de pedidos"
                git="https://github.com/marcoantn020/orders-ms"
                :image_1="asset('imagens/projects/Swagger.png')"
            />

        </x-projects.card-corousel-projects>
    </div>

    <hr>
    <h4 class="text-xl font-bold dark:text-white">Angular</h4>

    <div class="flex justify-start gap-4 flex-wrap">
        <x-projects.card-corousel-projects>

            <x-projects.card-project-detail
                title="Agenda"
                git="https://github.com/marcoantn020/angular-agenda"
                :image_1="asset('imagens/projects/agenda.png')"
                :image_2="asset('imagens/projects/agenda2.png')"
            />

        </x-projects.card-corousel-projects>

        <x-projects.card-corousel-projects>

            <x-projects.card-project-detail
                title="Biblioteca de memorias"
                git="https://github.com/marcoantn020/angular-memoteca"
                :image_1="asset('imagens/projects/memoteca.png')"
                :image_2="asset('imagens/projects/memoteca2.png')"
            />

        </x-projects.card-corousel-projects>

    </div>
</x-guest-layout>
