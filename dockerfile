FROM alpine
COPY docker-compose.yaml .
CMD cp docker-compose.yaml /project/
