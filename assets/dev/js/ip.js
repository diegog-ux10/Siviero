
async function getIp() {

    const response = await fetch('https://api.ipify.org?format=json')
    const ipObj = await response.json()
    return ipObj.ip
    
}

async function getGeoLocation(ip) {
    const response = await fetch('https://geo.ipify.org/api/v2/country,city?apiKey=at_6lwAvqruiUAfPCdq1ITlis4Wp9pL9&ipAddress=' + ip)
    const geoLocationObj = await response.json()
    return geoLocationObj
    
}

async function geoInit() {
    const ip = await getIp()
    const geoLocation = await getGeoLocation(ip)
    console.log(geoLocation)
}

geoInit()