FROM alpine:3.22.1

RUN apk add vim

# lance par défaut cette commande, mais peut être surchargé
CMD ps ax
# docker run -it my-alpine sh 

# force l'utilisation de cette commande
# mais ajoute l'instruction du docker run à la suite de la commande
ENTRYPOINT npm {...}
# docker run my-npm install
# docker run my-npm install react-hook-form

# Documente le fait que mon image exploite le port 80
EXPOSE 80