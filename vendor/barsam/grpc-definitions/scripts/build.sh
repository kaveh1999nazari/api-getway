mkdir generated

# Install required tools
apt-get update
apt-get install -y unzip

# Detect OS and architecture
OS=$(uname -s | tr '[:upper:]' '[:lower:]')
ARCH=$(uname -m)

# Map architecture to the expected format
case "$ARCH" in
    x86_64)
        ARCH="amd64"
        ;;
    arm64)
        ARCH="arm64"
        ;;
    *)
        echo "Unsupported architecture: $ARCH"
        exit 1
        ;;
esac
echo "Detected OS: $OS, architecture: $ARCH"

# Download the protoc-gen-php-grpc plugin
#PLUGIN_URL="https://github.com/roadrunner-server/roadrunner/releases/download/v2024.2.1/protoc-gen-php-grpc-2024.2.1-${OS}-${ARCH}.zip"
#curl -L -o ./protoc-gen-php-grpc.zip $PLUGIN_URL
#unzip -o ./protoc-gen-php-grpc.zip -d ./scripts
#rm ./protoc-gen-php-grpc.zip
#
#mv ./protoc-gen-php-grpc-2024.2.1-${OS}-${ARCH}/protoc-gen-php-grpc ./protoc-gen-php-grpc
#rm -rf ./protoc-gen-php-grpc-2024.2.1-${OS}-${ARCH}

mv ./scripts/protoc-gen-php-grpc ./protoc-gen-php-grpc
chmod +x ./protoc-gen-php-grpc

protoc \
  --plugin=protoc-gen-grpc=./protoc-gen-php-grpc \
  --proto_path=./proto \
  --php_out=./generated \
  --grpc_out=./generated \
  \
  proto/*/service.proto\
  proto/*/messages/*.proto\
  proto/*/enums/*.proto\
  proto/*/models/*.proto
