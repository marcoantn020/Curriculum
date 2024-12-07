FROM php:8.3-fpm

# Argumentos para usuário e UID
ARG user=marco
ARG uid=1000

# Instalar dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    zsh \
    nano \
    wget && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Instalar extensões PHP necessárias
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd sockets

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Criar usuário e configurar permissões
RUN useradd -G www-data,root -u $uid -d /home/$user $user && \
    mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Instalar Oh My Zsh e configurar para o usuário
RUN sh -c "$(wget https://raw.githubusercontent.com/ohmyzsh/ohmyzsh/master/tools/install.sh -O -)" --unattended && \
    cp -R /root/.oh-my-zsh /home/$user/.oh-my-zsh && \
    cp /root/.zshrc /home/$user/.zshrc && \
    chown -R $user:$user /home/$user/.oh-my-zsh /home/$user/.zshrc

# Instalar plugins de autocomplete e syntax highlighting
RUN git clone https://github.com/zsh-users/zsh-autosuggestions ${ZSH_CUSTOM:-/home/$user/.oh-my-zsh/custom}/plugins/zsh-autosuggestions && \
    git clone https://github.com/zsh-users/zsh-syntax-highlighting ${ZSH_CUSTOM:-/home/$user/.oh-my-zsh/custom}/plugins/zsh-syntax-highlighting && \
    sed -i 's/^plugins=(git)$/plugins=(git zsh-autosuggestions zsh-syntax-highlighting)/' /home/$user/.zshrc && \
    sed -i 's/ZSH_THEME=".*"/ZSH_THEME="robbyrussell"/' /home/$user/.zshrc

# Configurar o zsh como o shell padrão para o usuário
RUN chsh -s $(which zsh) $user

# Definir o usuário padrão e o diretório de trabalho
USER $user
WORKDIR /home/$user/app

# Iniciar o container com zsh
#CMD ["zsh"]
