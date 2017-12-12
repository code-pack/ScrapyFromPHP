FROM phppython:latest

# Install developer tools
RUN echo 'deb http://download.opensuse.org/repositories/shells:/fish:/release:/2/Debian_9.0/ /' > /etc/apt/sources.list.d/fish.list
RUN apt-get update
ARG DEBIAN_FRONTEND=noninteractive
RUN apt-get install -y --no-install-recommends apt-utils wget gnupg
RUN wget -nv -qO - https://download.opensuse.org/repositories/shells:fish:release:2/Debian_9.0/Release.key | apt-key add -
RUN apt-get install -y --no-install-recommends vim tmux build-essential git
RUN apt-get update
RUN apt-get install -y fish

# Install Python dependencies
COPY requirements.txt /var/www/html
RUN pip install --no-cache-dir -r requirements.txt
