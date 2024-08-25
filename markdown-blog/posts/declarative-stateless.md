# QUINE Core

The QUINE Foundation is strongly in favor of declarative and stateless systems. Recently, we have been battling entropy, specifically the entropy of hosted virtual machines and how their shelf lives are limited.

In the pursuance of disaster-tolerance, sometimes we must tread new ground. The QUINE Foundation has now developed a stateless configuration for its entire host of services.

In terms of tech, it uses Nix, but an alternative, Guix, was also considered. Guix is probably a good idea, but both systems rely on a daemon for constructing the system, meaning they cannot easily be containerized. Guix could probably be the future, but since it is a GNU project, it is at least 15% cursed. A new release of the .iso has not been cut for several years.

There is also Tvix, which is a rewrite of Nix (in Rust, if that matters). Tvix makes several modifications to the way Nix works, but largely aims to handle everything that Nix can handle. It is the estimation of the QUINE Foundation that if Nix were to be rewritten in Rust, it would be more easily iterated on by changing syntax. Regardless, Nix definitely needs an iteration or two. It has remained largely unreimplemented for over a decade, and as we know, the number of iterations on software is correlated with its overall level of quality.

The overall architecture includes a system daemon, pullomatic, to be running and refreshing checked-out Git repositories. By name, this makes a pull-based deployment model. Since the server is essentially stateless, any disaster will be easily recovered from with a simple

```
nix --extra-experimental-features flakes --extra-experimental-features nix-command run --debug github:numtide/nixos-anywhere --verbose -- --flake .#nixos root@host.name.here.com
```

NixOS has finally allowed QUINE Foundation and QUINE Global to escape the ever-creeping forces of entropy and bitrot. We declare victory, as the blog.quinefoundation.com domain rises out of the ashes and into the realm of serving requests.

We also have a [new logo](http://blog.quinefoundation.com/static/quine_global_logo.png).

If you believe in self-hosted solutions to escape broader control, follow us on [RSS](http://blog.quinefoundation.com/rss.xml). You can also [find or even message us on LinkedIn](https://www.linkedin.com/company/quine-foundation).
