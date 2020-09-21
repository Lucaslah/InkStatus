require "language/node"

class Inkstatus < Formula
  desc "A Node Js Server Info App"
  homepage "https://github.com/Lucaslah/InkStatus#readme"
  url "https://registry.npmjs.org/inkstatus/-/inkstatus-1.0.9.tgz"
  version "1.0.9"
  sha256 "17759c7541845cd5cf770983fdd01d605c9bbc847fcb77f0e28fafe8f9db5534"

  depends_on "node"

  def install
    system "npm", "install", *Language::Node.std_npm_install_args(libexec)
    bin.install_symlink Dir["#{libexec}/bin/*"]
  end

  test do
    raise "Test not implemented."
  end
