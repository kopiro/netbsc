# Deployment

- Edit this repository locally. Push authorized changes to `master`; GitHub
  Actions builds and publishes `ghcr.io/kopiro/netbsc:latest` for
  `linux/amd64` and `linux/arm64`, then notifies the configured Watchtower API.
- KoCloud runs `/opt/docker/netbsc`. Let this workflow deploy the image;
  do not build or patch application files on the production host.
- Watchtower notifications may update other eligible containers too. Deploy
  one project at a time and verify the Actions result, running image digest,
  Alpine/PHP versions, service logs, and an uncached HTTP response on KoCloud.
  A successful notification alone does not prove the application updated.
- Preserve production environment, databases, volumes, routing, and existing
  PHP-FPM limits. Keep the previous image available until verification passes.
- Use a supported Alpine branch and keep PHP packages, configuration paths,
  and the Supervisor executable in sync when changing PHP versions.
