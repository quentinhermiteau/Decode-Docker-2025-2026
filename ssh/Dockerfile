FROM alpine:3.22.1

RUN apk add --update --no-cache openssh

RUN ssh-keygen -A

RUN sed -i s/#PermitRootLogin.*/PermitRootLogin\ yes/ /etc/ssh/sshd_config \
  && echo "root:password" | chpasswd

EXPOSE 22

CMD ["/usr/sbin/sshd", "-D"]