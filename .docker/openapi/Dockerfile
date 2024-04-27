#syntax=docker/dockerfile:1.6

FROM alpine:3.19.1
RUN set -e \
 && apk --no-cache add bash openjdk11 mc npm \
 && npm install @openapitools/openapi-generator-cli -g
WORKDIR /app/
