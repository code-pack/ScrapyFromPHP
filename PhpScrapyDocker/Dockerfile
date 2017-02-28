FROM phppython:latest

# Install developer tools
RUN echo 'deb http://download.opensuse.org/repositories/shells:/fish:/release:/2/Debian_8.0/ /' >> /etc/apt/sources.list.d/fish.list
RUN apt-get update
RUN wget -qO - http://download.opensuse.org/repositories/shells:fish:release:2/Debian_8.0/Release.key | apt-key add -
RUN apt-get update
RUN apt-get install -y fish vim tmux
RUN pip install ipdb

# Install Scrapy
RUN apt-get install -y libssl-dev
RUN pip install scrapy

# COPY requirements.txt /usr/src/app/
# RUN pip install --no-cache-dir -r requirements.txt
