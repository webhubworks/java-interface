FROM openjdk:11

RUN mkdir /app

COPY secon-tool-1.1.1.jar /app/secon-tool-1.1.1.jar

WORKDIR /app

ENTRYPOINT ["java","-jar","/app/secon-tool-1.1.1.jar"]
