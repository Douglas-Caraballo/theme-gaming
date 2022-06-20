import { CargoClient } from "poro";

const cargo = new CargoClient()
// specify fields
/*const teams = await cargo.query({
  tables: ['Teams'],
  fields: ['Teams.Name', 'Teams.Region'],
})
// filter
const g2 = await cargo.query({
  tables: ['Teams'],
  where: 'Teams.Name = "G2 Esports"',
})
// join on
const broadcastMusicUsages = await cargo.query({
  tables: ['BroadcastMusicUsages', 'BroadcastMusicTracks'],
  joinOn: [
    {
      left: 'BroadcastMusicUsages.TrackID',
      right: 'BroadcastMusicTracks.TrackID',
    },
  ],
})*/
// group

async function penta(){
    const proplayers = await cargo.query({
        tables: ['Pentakills'],
        groupBy: ['Pentakills.Name'],
        having: 'COUNT(DateDisplay) > 10',
      })
      
      console.log(proplayers);
}
penta();