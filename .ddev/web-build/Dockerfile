# Example of custom Java runtime using jlink in a multi-stage container build
FROM eclipse-temurin:11 as jre-build

RUN $JAVA_HOME/bin/jlink \
         --add-modules java.base \
         --strip-debug \
         --no-man-pages \
         --no-header-files \
         --compress=2 \
         --output /javaruntime

FROM debian:buster-slim
ENV JAVA_HOME=/opt/java/openjdk
ENV PATH "${JAVA_HOME}/bin:${PATH}"
COPY --from=jre-build /javaruntime $JAVA_HOME

RUN mkdir /opt/app
COPY secon-tool-1.1.1.jar /opt/app
ENTRYPOINT ["java", "-jar", "/opt/app/secon-tool-1.1.1.jar"]
